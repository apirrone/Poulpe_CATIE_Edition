import csv
import traceback
import argparse
import sys
import os
import unidecode
from tabulate import tabulate
import operator


class Player(object):
    """
    Represents a player, stores his stats 
    """

    def __init__(self, name):
        self.name = name
        self.scores = []
        self.avg = 0

    def __repr__(self):
        s = "Player name : {}, avg score = {}\nscores :\n{}".format(
            self.name, self.avg, self.scores
        )
        return s

    def __eq__(self, other):
        """Override the default Equals behavior"""
        if isinstance(other, self.__class__):
            return self.name == other.name
        return False

    def __ne__(self, other):
        """Override the default Unequal behavior"""
        return self.name != other.name


def normalize_string(s):
    return unidecode.unidecode(s)
    # return unicodedata.normalize("NFKD", s).encode("ASCII", "ignore").decode("ASCII")


def read_data(path, verbose=False):
    players = {}
    try:
        for dir_name, subdir_list, file_list in os.walk(path):
            for f in file_list:
                with open(dir_name + "/" + f, "r", newline="\n") as csvfile:
                    rows = csv.reader(csvfile, delimiter=",", quotechar="|")
                    names = []
                    first = True
                    for r in rows:
                        if first:
                            first = False
                            for n in r:
                                # Making sure the names are upper case and without accents, and creating a Player if it didn't exist already
                                name = normalize_string(n).upper()
                                if verbose:
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
                    if verbose:
                        print("Added scores for {}".format(str(names)))
    except Exception as err:
        traceback.print_exc(file=sys.stdout)
    return players


def main(path, verbose=False):
    # Reads the CSV files and created the associated players objects
    players = read_data(path, verbose)
    for k, p in players.items():
        sum = 0
        for s in p.scores:
            sum = sum + s
        p.avg = float(sum) / len(p.scores)
        if verbose:
            print(p)

    # customObjects.sort(key=lambda x: x.date, reverse=True)
    # sorted_players = sorted(players.items(), key=lambda kv: kv[1])
    print("Sorting...")
    sorted_players = sorted(
        players.values(), key=operator.attrgetter("avg"), reverse=True
    )

    header = ["Rank", "Name", "Number of games", "Scores", "Average score"]
    lines = []
    i = 1
    for p in sorted_players:
        lines.append([i, p.name, len(p.scores), p.scores, p.avg])
        i += 1
        
    print("\n" + tabulate(lines, headers=header, tablefmt="grid"))


if __name__ == "__main__":
    parser = argparse.ArgumentParser(
        description="Process csv files containing scores and outputs cool stuff"
    )
    parser.add_argument("path", help="path to the folder containing the csv")
    # Not used here but might be useful. No -v => args.verbosity=0, -v => args.verbosity=1, -vv => args.verbosity=2, etc.
    parser.add_argument("-v", "--verbosity", action="count", default=0)
    args = parser.parse_args()

    main(args.path, verbose=args.verbosity)
