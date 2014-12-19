# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 12:06:11 2014

@author: thinkpad
"""

lst = [12, 13, 15, 18, 22, 26, 30, 30, 25, 22, 16, 13]
avg = sum(lst)/float(len(lst))

above_avg = filter(lambda x : x >= avg, lst)
print above_avg

