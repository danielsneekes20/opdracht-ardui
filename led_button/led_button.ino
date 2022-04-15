
const int BUTTON = 10;
bool pressed = false;

void setup(){
    pinMode(BUTTON, INPUT_PULLUP);
    Serial.begin(9600);
}

void loop(){
    if (!digitalRead(BUTTON)){
        delay(10);
        if(!digitalRead(BUTTON) && !pressed) {
            Serial.println('b');
            pressed = true;
        }
    } else {
        pressed = false;
    }
}
