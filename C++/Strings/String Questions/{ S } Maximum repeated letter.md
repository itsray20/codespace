code : #Strings 

#include <algorithm>
#include <iostream>
#include <string>
using namespace std;
int main() {
  string words;
  cout << "\nEnter The Word : ";
  cin >> words;
  int freq[26]; // a-z

  for (int i = 0; i < 26; i++) {
    freq[i] = 0;
  }

  for (int i = 0; i < words.size(); i++) {
    freq[words[i] - 'a']++;
  }
  char ans = 0;
  int maxF = 0;
  for (int i = 0; i < 26; i++) {
    if (freq[i] > maxF) {
      maxF = freq[i];
      ans = i + 'a';
    }
  }
  cout << "\nMaximum Repeted letter is : " << ans << " "
       << "Repeted on : " << maxF << " times." << endl;
}