#include <iostream>
#include <cstring>
int main()
{
	char x[] = "Hello my name is sena";
	char y[22];
	char z[8];
	char a[6];
	strcpy_s(y, x) ; // y�� xfmf ���� ��
	std::cout << "ù��° ������" << x
		 << "\n�ι�° ������" << y << '\n';

	strncpy_s(z, x, 7); // 7��°������ ������ z�� ����
	z[7] = '\0'; // �̰� ���� ��Ȱ�ΰ���? ���ͳݿ��� �̰� ����ؾ� �Ѵٰ� �ؼ� �ߴµ� ���ذ� ���� �ʽ��ϴ�.

	std::cout << "\n����° ������" << z << std::endl;
	
}