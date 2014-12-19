# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 10:17:40 2014

@author: thinkpad
"""

def ratio_below_avg(data):
    num_of_data = len(data) 
    def avg(data):
        return sum(data)/float(num_of_data)
    avg_value = avg(data)
    return [el for el in data if el < avg_value]

def ratio_above_avg(data):
    avg_value = lambda data: sum(data)/float(len(data))
    return [el for el in data if el > avg_value(data)]

lst = [5, 7, 4, 6, 3, 2]
print ratio_below_avg(lst)
print ratio_above_avg(lst)