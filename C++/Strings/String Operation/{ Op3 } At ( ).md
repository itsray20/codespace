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

  cout << " At() :" << endl;

  cout << " " << word1.at(5) << endl;
  cout << " " << word2.at(3) << endl;
}

at(): Returns the character at a particular position (can also be done using ‘[
]’ operator). Its time complexity is O(1).