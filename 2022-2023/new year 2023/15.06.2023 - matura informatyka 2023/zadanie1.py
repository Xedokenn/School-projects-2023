#https://arkusze.pl/maturalne/informatyka-2023-maj-matura-rozszerzona.pdf

#wybieranie pola
#i = input("wybierz półke")
#j = input("wybierz przegrodę")
i = 3
j = 4


i_int = 3
j_int = 4
B = [i_int,j_int]

a = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
if i<= j <= 2**i:
    for i in range(0, 5):  # numery półek
        print("|",B[0],"|",end = " ")
        for j in range(1, (2**i)+1): # numery przegródek
            print(j, end = " ")
        print("| \n")
        
        
        
else:
    print("Wprowadzone są złe liczby")
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
'''
for i in range(0, 5):  # numery półek
    print("|",i,"|",end = " ")
    for j in range(1, (2**i)+1): # numery przegródek
        print(j, end = " ")
    print("| \n")
'''