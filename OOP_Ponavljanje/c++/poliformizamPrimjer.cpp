    #include<iostream>
    using namespace std;

class Osoba {
public:
    string ime;
    Osoba() {}    
    virtual void ispisPodataka() = 0;
    
    //virtual string dohvatiIme() = 0;
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
    Osoba* nizOsoba[5]; 
    nizOsoba[0] = new Student("Petar", 2331);
    nizOsoba[1] = new Profesor("Miljenko", new string[5]{"DIMT","RIP"});
    
    for(int i = 0; i < 5; i++) {
        nizOsoba[i]->ispisPodataka();
    }
    
    return 0;
}