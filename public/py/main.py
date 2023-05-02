import datetime as dt 
import threading

now = dt.datetime.now()
el = Element("rt-clock-id")


def show_time():
    el.write(now.strftime("%d-%m-%Y %H:%M:%S"))

show_time()