#link https://arkusze.pl/maturalne/informatyka-2023-maj-matura-rozszerzona.pdf




# polka nr i ma 2^i przegrodek
# polka nr 1 ma 2 przegroder
# polka nr 4 ma 16 przegrodek 


polka = int(3) # i
przegrodka = int(4) # j

ksiazki = [10,2,15,13,1,5,25]
Biblioteka = []



for i in range(przegrodka):
    
    if i >= 0 and 1 <= przegrodka <= 2**i:
        print(ksiazki[i])
        
        #wrzuc tu ksiaze