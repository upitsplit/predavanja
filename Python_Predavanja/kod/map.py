# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 11:51:24 2014

@author: thinkpad
"""


seq = [12, 13, 15, 18, 22, 26, 30, 30, 25, 22, 16, 13]

fahr_seq = map(lambda x : x * 9./5 + 32, seq)
print("fahrenheit", fahr_seq)

cels_seq = map(lambda x : (x - 32) * 5./9, fahr_seq)
print("celsius", cels_seq)


newlst = map(lambda x, y : (x, y), fahr_seq, cels_seq)
print(newlst)

