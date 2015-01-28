# -*- coding: utf-8 -*-
"""
Created on Mon Dec 15 13:49:43 2014

@author: thinkpad
"""

def power(n, k):
    return n**k

def myprint(i, x):
    print i , "->", x
    
k = 3    
lst = [[power(n, k) for n in range(1, 11)] for k in range(10)]
[myprint(i, lst[i]) for i in range(len(lst))]