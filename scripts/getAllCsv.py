#!/usr/bin/env python3

import re
import os
import sys

# Handle custom output directory
if(len(sys.argv) > 1):
    outDir = sys.argv[1]
else:
    outDir = 'csv' # No directory specified, default is './csv/'


# Remove trailing '/'
while(outDir[-1] == '/'):
    outDir = outDir[:-1]
    
file="../scores.md"
with open(file) as f:
    lines = f.readlines()
    links = []
    for l in lines:
        link = re.findall(r'.*https://keepthescore\.co.*', l)
        if(link):
            links.append(link)

    if not os.path.exists(outDir):
        os.makedirs(outDir)
            
    for l in links:
        string = str(l)[2:][:-2]
        downloadLink = string+'/download'
        print(downloadLink)
        os.system('wget -P '+outDir+'/ '+downloadLink)
        
        

    

    
        
