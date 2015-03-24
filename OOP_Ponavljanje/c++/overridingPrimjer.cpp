#include<iostream>
using namespace std;

class Osoba {
public:
    string ime;
    Osoba() {}
    Osoba(string ime) {
        this->ime = ime;
    }
    
//rijec virtual ovisi o tome je li linkanje na funkciju u runtime ili compile time    
    virtual void ispisPodataka() {
        cout << "Called from Osoba!" << endl;
        cout << "Moje ime je " << this->ime << endl;
    }
    
    string dohvatiIme() {
        return this->ime;
    }
};    
    
    
class Profesor : public Osoba {
public:
    string kolegiji[5];

    Profesor(string ime, string kolegiji[]) {
        this->ime = ime;
        int iterator = 0;
        while(!kolegiji[iterator].empty()) {
            this->kolegiji[iterator] = kolegiji[iterator];
            iterator++;
        }

    }

//Overriding
    void ispisPodataka() {
        cout << "Moje ime je " << this->ime << endl;
        this->ispisKolegija();
    }

    void ispisPodataka(int a) {
        cout << "ime" << a;
    }

    void ispisKolegija() {
        int iterator = 0;
        while(!this->kolegiji[iterator].empty()) {
            cout << "Predaje: " << this->kolegiji[iterator] << endl;
            iterator++;
        }
    }

};

class Student : public Osoba {
    int matBr;
    static int numObj;
public:
    Student(string ime, int matBr) {
        Student::numObj++;
        this->ime = ime;
        this->matBr = matBr;
    }

////Overriding
    void ispisPodataka() {
        cout << "Moje ime je " << this->ime << endl;
        cout << "Mat.br: " << this->matBr << endl;
    }
    
    static int getNumObj() {
        return Student::numObj;
    }

};

int Student::numObj = 0;

int main(int argc, char** argv) {
    Student* pero = new Student("Petar", 1234);
    Student* mate = new Student("Mate", 3432);
    Profesor* profa = new Profesor("Miljenko", new string[5]{"PIN","DIMT","RIP"});
    pero->ispisPodataka();
    profa->ispisPodataka();
    pero->ispisPodataka(2);
    return 0;
}

