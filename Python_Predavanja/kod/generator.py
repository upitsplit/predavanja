# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 13:42:34 2014

@author: thinkpad
"""

def power(n):
    """ yield power of n, create generator """
    k  = 0
    while(True):    
        yield n**k
        k += 1
    
    
for i in power(2):
    print i
    if i > 10**50:break