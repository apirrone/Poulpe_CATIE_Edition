import csv
import traceback
import argparse
import sys
import os
import unidecode


class Player(object):
    """
    Represents a player, stores his stats 
    """

    def __init__(self, name):
        self.name = name
        self.scores = []

    def __repr__(self):
        s = "Player name : {}, scores :\n{}".format(self.name, self.scores)
        return s

    def __eq__(self, other):
        """Override the default Equals behavior"""
        return self.name == other.name


def normalize_string(s):
    return unidecode.unidecode(s)
    # return unicodedata.normalize("NFKD", s).encode("ASCII", "ignore").decode("ASCII")


def main(path):
    players = {}
    try:
        with open(path, "r", newline="\n") as csvfile:
            rows = csv.reader(csvfile, delimiter=",", quotechar="|")
            names = []
            first = True
            for r in rows:
                if first:
                    first = False
                    for n in r:
                        # Making sure the names are upper case and without accents, and creating a Player if it didn't exist already
                        name = normalize_string(n).upper()
                        print(name)
                        names.append(name)
                        if not (name in players):
                            players[name] = Player(name)
                else:
                    # Recording the scores for each player
                    count = 0
                    for score in r:
                        try:
                            if count >= len(names):
                                break
                            p = players[names[count]]
                            p.scores.append(int(score))
                            count = count + 1
                        except Exception as err:
                            traceback.print_exc(file=sys.stdout)
                            sys.exit()
            print("Added scores for {}".format(str(names)))
        for k, v in players.items():
            print(v)
    except Exception as err:
        traceback.print_exc(file=sys.stdout)


if __name__ == "__main__":
    parser = argparse.ArgumentParser(
        description="Process csv files containing scores and outputs cool stuff"
    )
    parser.add_argument("path", help="path to the folder containing the csv")
    # Not used here but might be useful. No -v => args.verbosity=0, -v => args.verbosity=1, -vv => args.verbosity=2, etc.
    parser.add_argument("-v", "--verbosity", action="count", default=0)
    args = parser.parse_args()

    main(args.path)
