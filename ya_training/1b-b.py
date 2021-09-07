stations_count, in_station, out_station = map(int, input().split())

"""
Витя работает недалеко от одной из станций кольцевой линии Московского метро, 
а живет рядом с другой станцией той же линии. 
Требуется выяснить, мимо какого наименьшего количества промежуточных станций 
необходимо проехать Вите по кольцу, чтобы добраться с работы домой.
"""

def get_result(n, i, j):
    p = abs(i-j)-1
    if p >= n // 2:
        p = n-p-2
    return p


print(get_result(stations_count, in_station, out_station))