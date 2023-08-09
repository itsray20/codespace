code : #Strings 

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = "150";
  string word2 = "50";
  cout << "\n";
  // Operations

  cout << "stoi() :\n" << endl;

  cout << "Word : " << word1 << endl;
  int w1 = stoi(word1);
  cout << "size : " << w1 + 50 << "\n\n";

  cout << "Word : " << word2 << endl;
  int w2 = stoi(word2);
  cout << "size : " << w2 + 50 << "\n\n";
}

stoi(): Returns the strings converted to int datatype.
