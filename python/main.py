from machine import Pin
from time import sleep_ms
import time
import urequests
from network import WLAN
import machine

wlan = WLAN(mode=WLAN.STA)
time.sleep(2)
wlan.connect(ssid='XXX', auth=(WLAN.WPA2, 'XXX'))
while not wlan.isconnected():
    machine.idle()
print("WiFi connected succesfully")
print(wlan.ifconfig())


# btn = Pin('P1', Pin.IN, Pin.PULL_UP)
# btn2 = Pin('P5', Pin.IN, Pin.PULL_UP)
# btn3 = Pin('P8', Pin.IN, Pin.PULL_UP)
# btn4 = Pin('P11', Pin.IN, Pin.PULL_UP)


btn = Pin('P4', Pin.IN, Pin.PULL_UP)
btn2 = Pin('P7', Pin.IN, Pin.PULL_UP)
btn3 = Pin('P9', Pin.IN, Pin.PULL_UP)
btn4 = Pin('P11', Pin.IN, Pin.PULL_UP)

led = Pin('P20', Pin.OUT, Pin.PULL_DOWN)

def irq_function_sad(btn):
    if not btn.value():
        led.value(1)
        print("ongelukkig")
        sleep_ms(500)
        send_emotie("ongelukkig")
        led.value(0)


def irq_function_tired(btn2):
    if  not btn2.value():
        led.value(1)
        print("moe")
        sleep_ms(500)
        send_emotie("moe")
        led.value(0)

def irq_function_happy(btn3):
    if  not btn3.value():
        led.value(1)
        print("gelukkig")
        sleep_ms(500)
        send_emotie("gelukkig")
        led.value(0)


def irq_function_really_happy(btn4):
    if  not btn4.value():
        led.value(1)
        print("heel gelukkig")
        sleep_ms(500)
        send_emotie("heel gelukkig")
        led.value(0)


def send_emotie(emotie):
    res = urequests.post('https://137.135.202.38/moodboard/leerling/logging_lln.php', json={"emotie": emotie})
    res.close()
    if (res.status_code - 200) < 100: # check that response code is in the 200 range
        print('done')
    else:
        print('there was some error')


def main():
    btn.callback(Pin.IRQ_FALLING, irq_function_sad)
    btn2.callback(Pin.IRQ_FALLING, irq_function_tired)
    btn3.callback(Pin.IRQ_FALLING, irq_function_happy)
    btn4.callback(Pin.IRQ_FALLING, irq_function_really_happy)
    while True:
        time.sleep(2)


if __name__ == "__main__":
    main()
