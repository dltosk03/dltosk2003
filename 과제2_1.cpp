#include <iostream>
#include <string>

int main()
{
	std::string word = "Hard c++";
	std::cout << word.append(" �Ф�") << std::endl; //�׳� ���� �ڿ� ����
	std::cout << word.insert(5, "learning ") << std::endl; // 5��°�� learning�� ����
	std::cout << word.replace(5, 8, "studying") << std::endl; //�� 5�� 8�� ��� Hard �� c++���̿� �����ִ°ǰ���? ���⼭ word�� "Hard learning c++"�ƴѰ���? �׷� 6�� 13�ƴѰ���? 
	std::cout << word.erase(0, 5) << std::endl; // 0���� 5�� ����

	std::cout << word.at(0) << std::endl;
}