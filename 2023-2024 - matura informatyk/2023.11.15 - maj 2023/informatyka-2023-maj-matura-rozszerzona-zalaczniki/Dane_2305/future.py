import time
import asyncio

# poczatek, brak informacji

#pierwszy przelot, zlicz ilosc bramek + czas
czas_przelotu = 60 # czas w sekundach
ilosc_bramek = 15
power = 1000 # moc 
ciezkosc = 4 # im wieksza liczba, tym mniej mocy masz 
#srednia czasu miedzy bramkami
delta = czas_przelotu / ilosc_bramek

#kazda bramka daje power/ciezkosc
#jezeli czas czas_przelotu/(ciezkosc*2), power = 0
async def timer( czas_time):
    while True:
        if czas_time < 0:
            return False
        time.sleep(1)
        czas_time -= 1
        print("hello")
        
while True:
    print(czas_przelotu)
    # czas_przelotu = timer(czas_przelotu)
    print(czas_przelotu)
    if not czas_przelotu :
        break;