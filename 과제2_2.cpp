#include <iostream>
#include <cstring>
int main()
{
	char x[22] = "Hello my name is sena";
	char y[22] = "Hello my name is sena";
	char z[6] = "Hello";
	char a[6] = "a";
	
	/*strncat_s(a, x, 5);
	std::cout << "\nùù��° ������" << a << std::endl;*/ //strncat_s�� ���� �ڲ� ������ ���� �����̾ȵ˴ϴ�. ������ �𸣰ڽ��ϴ�.

	// strncat_s(x, y); --> �̰� �� ������ �ߴ��� ���ذ� �ȵ˴ϴ�. 

	std::cout <<  "\nstrcmp(x,y) =" << strcmp(x, y) << "\nstrcmp(y,z) =" << strcmp(y, z) << std::endl; // x y �Ѵ� ���� ������ ��������Ƿ� 0�̳����� y�� z�� �ٸ��Ƿ� 1�̳��´�.

	std::cout  << "\nstrlen(x) =" << strlen(x)  << std::endl; //ũ�Ⱚ�� �˾Ƴ��� ���� ������
	 
	return 0;
}