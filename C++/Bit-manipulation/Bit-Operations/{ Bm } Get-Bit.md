code : #bit-manipulation

#include <iostream>
using namespace std;

int getbit(int n,int position)
{
  return((n&(1<<position))!=0);
}
int main() 
{ 
  cout << getbit(45, 3)<<endl;        
}