code : #Strings 

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = "Hello";
  string word2 = "Namaste";
  cout << "\n";
  // Operations

  cout << "Length() :\n" << endl;

  cout << "Word : " << word1 << endl;
  cout << "Length : " << word1.length() << "\n\n";

  cout << "Word : " << word2 << endl;
  cout << "Length : " << word2.length() << endl;
}

length ( ) : Returns the length of the string. Its time complexity is O(1).