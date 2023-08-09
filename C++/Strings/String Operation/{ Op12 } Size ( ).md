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

  cout << "size() :\n" << endl;

  cout << "Word : " << word1 << endl;
  cout << "size : " << word1.size() << "\n\n";

  cout << "Word : " << word2 << endl;
  cout << "size : " << word2.size() << "\n\n";
}
 
 
 size(): Returns the length of the string. Its time complexity is O(1).