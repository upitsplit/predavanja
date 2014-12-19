# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 11:34:51 2014

@author: thinkpad
"""

def suma(f, lst):
    return sum([f(n) for n in lst ])
    
square = lambda x : x*x
cube = lambda x : x**3

l = xrange(100000)
print(suma(square, l))
print(suma(cube, l))


def suma_pot(f, k, lst):
    return sum([f(n, k) for n in lst ])
    
    
pot = lambda x, i : x**i
print(suma_pot(pot, 3, l))