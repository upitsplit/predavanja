#include<iostream>
using namespace std;

class Profesor {
public:
    string ime;
    string kolegiji[5];
    
    Profesor(string ime, string kolegiji[]) {
        this->ime = ime;
        int iterator = 0;
        while(!kolegiji[iterator].empty()) {
            this->kolegiji[iterator] = kolegiji[iterator];
            iterator++;
        }
        
    }
    
    
    
    void ispisKolegija() {
        int iterator = 0;
        while(!this->kolegiji[iterator].empty()) {
            cout << "Predaje: " << this->kolegiji[iterator] << endl;
            iterator++;
        }
    }
    
};

class Student {
    int matBr;
    static int numObj;
public:
    
    string ime;
    Student(string ime, int matBr) {
        Student::numObj++;
        this->ime = ime;
        this->matBr = matBr;
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
    profa->ispisKolegija();
    return 0;
}
