#include<iostream>
using namespace std;

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
    cout << Student::getNumObj();
    return 0;
}