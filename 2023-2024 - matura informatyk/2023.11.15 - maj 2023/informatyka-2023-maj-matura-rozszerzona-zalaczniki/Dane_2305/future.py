import time
import asyncio

# poczatek, brak informacji

#pierwszy przelot, zlicz ilosc bramek + czas
czas_przelotu = 60 # czas w sekundach
ilosc_bramek = 0

power = 1000 # moc 
ciezkosc = 4 # im wieksza liczba, tym mniej mocy masz 
#srednia czasu miedzy bramkami
delta = czas_przelotu / ilosc_bramek

# Timer starts
starttime = time.time()
lasttime = starttime
lapnum = 1
value = ""
  
print("Press ENTER for each lap.\nType Q and press ENTER to stop.")
while value != "q":       
    
    if ilosc_bramek > 0: # dla kazdej bramki wyslij value, ktore zliczy czas miedzy bramkami
        
        # The current lap-time
        laptime = round((time.time() - lasttime), 2)
        # Total time elapsed since the timer started
        totaltime = round((time.time() - starttime), 2)
        # Printing the lap number, lap-time, and total time
        print("Lap No. "+str(lapnum))
        print("Total Time: "+str(totaltime))
        print("Lap Time: "+str(laptime))
        print("*"*20)
        # Updating the previous total time and lap number
        lasttime = time.time()
        lapnum += 1
    print("Exercise complete!")
        
        
        
        
# #kazda bramka daje power/ciezkosc
# #jezeli czas czas_przelotu/(ciezkosc*2), power = 0
# async def timer( czas_time):
#     while True:
#         if czas_time < 0:
#             return False
#         time.sleep(1)
#         czas_time -= 1
#         print("hello")
        
# while True:
#     print(czas_przelotu)
#     # czas_przelotu = timer(czas_przelotu)
#     print(czas_przelotu)
#     if not czas_przelotu :
#         break;


# for safety reasons:
# print("Press ENTER for each lap.\nType Q and press ENTER to stop.")
# while value.lower() != "q":       
#     # Input for the ENTER key press
#     value = input()
#     # The current lap-time
#     laptime = round((time.time() - lasttime), 2)
#     # Total time elapsed since the timer started
#     totaltime = round((time.time() - starttime), 2)
#     # Printing the lap number, lap-time, and total time
#     print("Lap No. "+str(lapnum))
#     print("Total Time: "+str(totaltime))
#     print("Lap Time: "+str(laptime))
#     print("*"*20)
#     # Updating the previous total time and lap number
#     lasttime = time.time()
#     lapnum += 1
# print("Exercise complete!")