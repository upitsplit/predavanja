# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 12:21:22 2014

@author: thinkpad
"""

seq = (4, 6, 8, 2, 5)
max_el =  reduce (lambda a, b : a if a > b else b, seq)
print max_el
