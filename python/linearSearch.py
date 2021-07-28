print('Linear Search\n')

def linear_search(search_element, array_values):
    for index, element in enumerate(array_values):
        if element == search_element:
            print(f'Element {search_element} find on {index} position')
            return

    print('Not found')
    return

array_values = [i for i in range(1,15)]
linear_search(5, array_values)