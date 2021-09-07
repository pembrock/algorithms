task_code = int(input())
interactor = int(input())
checker = int(input())


# Вердикт чекера и вердикт интерактора — это целые числа от 0 до 7 включительно.
# Код завершения задачи — это целое число от -128 до 127 включительно.
# Если интерактор выдал вердикт 0, итоговый вердикт равен 3 в случае, если программа завершилась с ненулевым кодом, и вердикту чекера в противном случае.
# Если интерактор выдал вердикт 1, итоговый вердикт равен вердикту чекера.
# Если интерактор выдал вердикт 4, итоговый вердикт равен 3 в случае, если программа завершилась с ненулевым кодом, и 4 в противном случае.
# Если интерактор выдал вердикт 6, итоговый вердикт равен 0.
# Если интерактор выдал вердикт 7, итоговый вердикт равен 1.
# В остальных случаях итоговый вердикт равен вердикту интерактора.

def get_result(interactor, task_code, checker):
    if interactor == 0:
        if task_code != 0:
            return 3
        else:
            return checker
    if interactor == 1:
        return checker
    if interactor == 4:
        if task_code != 0:
            return 3
        else:
            return 4
    if interactor == 6:
        return 0
    if interactor == 7:
        return 1

    return interactor


print(get_result(interactor, task_code, checker))
