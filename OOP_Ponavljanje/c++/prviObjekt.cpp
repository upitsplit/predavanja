#include<iostream>
using namespace std;

class Student {
	public:
		string ime;
	private:
		int matBr;

	public:
	Student(string ime, int matBr) {
		this->ime = ime;
		this->matBr = matBr;
	}

	int getMatBr() {
		return this->matBr;
	}

};

int main() {
	Student* pero = new Student("Mate", 25);
	cout << pero->getMatBr() << endl;
	return 0;	
}