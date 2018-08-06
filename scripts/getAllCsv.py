#!/usr/bin/env python3

import re
import os

file="../scores.md"
with open(file) as f:
    lines = f.readlines()
    links = []
    for l in lines:
        link = re.findall(r'.*https://keepthescore\.co.*', l)
        if(link):
            links.append(link)

    outDir = 'csv/'
    if not os.path.exists(outDir):
        os.makedirs(outDir)
            
    for l in links:
        string = str(l)[2:][:-2]
        downloadLink = string+'/download'
        print(downloadLink)
        os.system('wget -P '+outDir+' '+downloadLink)
        
        

    

    
        
