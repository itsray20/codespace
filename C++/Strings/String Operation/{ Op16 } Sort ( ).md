code : #Strings 

#include <algorithm>
#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word = "HGFEDCBA";
  // Operation
  cout << "\nUnSorted Order : " << word << endl;
  sort(word.begin(), word.end());
  cout << "\nSorted Order : " << word << endl;
}


Sorting a string: To sort a string, we need to include a header file known as
algorithm in our code like this
#include<algorithm>
Then we can use sort() function that is present in above header file on our string.
Sort() function takes 2 arguments viz. iterator to start of the string and iterator to
end of the string.
