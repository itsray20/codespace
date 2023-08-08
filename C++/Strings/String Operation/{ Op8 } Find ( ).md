code : #Strings 

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = " Hello ";
  string word2 = " Namaste ";
  cout << "\n";
  // Operations

  cout << "Find() :" << endl;

  cout << "Word : " << word1 << endl;
  cout << word1.find("lo") << endl;
}


find(): Searches the string and returns the first occurrence of the parameter
in the string. Its time complexity is O(N) where N is the size of the string.