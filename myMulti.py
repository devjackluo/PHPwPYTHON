from multiprocessing import Process
import os
import time

def info(title):
    print(title)
    print('module name:', __name__)
    print('parent process:', os.getppid())
    print('process id:', os.getpid())
    #time.sleep(1)

def f(name):
    info('function f')
    print('hello', name)

def floop(name, x):
	
    for x in range(x):
    	info('function floop')
    	print('hello', name,  x,)


if __name__ == '__main__':

    info('main line')
    p = Process(target=f, args=('bob',))
    fl = Process(target=floop, args=('bob', 5,))
    fl2 = Process(target=floop, args=('jack', 10))
    #fl3 = Process(target=floop, args=())
    fl.start()
    fl2.start()
    #fl3.start()
    p.start()
    fl.join()
    fl2.join()
    #fl3.join()
    p.join()