#include <iostream>

int main_first(void)
{
	std::cout << "����� �̸��� �����Դϱ�?\n";
	char name_5[7];
	std::cin.getline(name_5, 11, '\n');  // "������"�� �ƴ� "�� ����"�� �Է¹������̱� ������ ���� ������ ���ڿ��� �������ִ� cin.getline()�������
	std::cout << "�ݰ����ϴ�." << name_5 << "��" << std::endl;

	int apple;
	int banana;
	int orange;
	int apple_price;
	int banana_price;
	int orange_price;
	int total;

	std::cout << "apple�� ������ ���Դϴ�?";
	std::cin >> apple;
	std::cout << "banana�� ������ ���Դϴ�?";
	std::cin >> banana;
	std::cout << "orange�� ������ ���Դϴ�?";
	std::cin >> orange;

	std::cout << "apple�� � �ֽ��ϱ�?";
	std::cin >> apple_price;
	std::cout << "banana�� � �ֽ��ϱ�?";
	std::cin >> banana_price;
	std::cout << "orange�� � �ֽ��ϱ�?";
	std::cin >> orange_price;

	total = apple * apple_price + banana * banana_price + orange * orange_price - 500;
	std::cout << "��" << total << "�� �Դϴ�.\n";
	

}
