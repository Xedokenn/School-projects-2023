def main():
    wyniki3 = open('./2023-2024 - matura informatyk/2023.11.08 - czerwiec 2023/informatyka-2023-czerwiec-matura-rozszerzona-zalaczniki/zad3/wyniki3.txt', 'w')
    wyniki3.write('whatever')
    wyniki3.close()
    
    dane = open('./2023-2024 - matura informatyk/2023.11.08 - czerwiec 2023/informatyka-2023-czerwiec-matura-rozszerzona-zalaczniki/zad3/przyklad.txt', 'r')
    plik = dane.read()
    dane.close()
    
    if isinstance(plik, str):
        lista_pliku = plik.split('\n')
    else:
        print('to nie string')


    #  tablica = [0,0]
    #  for liczba in lista_pliku:
        #  print(plik[liczba].count("0"))
        
        
        
        
# link
#https://arkusze.pl/maturalne/informatyka-2023-czerwiec-matura-rozszerzona.pdf

if __name__ == '__main__':
    main()