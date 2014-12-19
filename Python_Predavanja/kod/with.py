# -*- coding: utf-8 -*-
"""
Created on Mon Dec 15 10:26:31 2014

@author: thinkpad
"""
filename = raw_input("unesi ime datoteke")
with open(filename) as f:
    data = f.read()
    print data
    