import csv


result = open("VilleResult","w")

Data = []


with open('ville.csv', 'rU') as csvfile:
        f_out = csv.reader(csvfile, delimiter=';')
        for row in f_out:
                Line = row

                Data.append(Line)



del Data[:1]

i = 0
j = len(Data)

for DataLine in Data :

        if i < j :
                result.write('{ "index" : {"_index" : "ville", "_type" : "_doc"}}\n')
                body = '{"id" : "%s" , "nom" : "%s", "GeoX": "%s", "GeoY" : "%s", "pin": { "location" : "%s,%s" } }\n' % (DataLine[3], DataLine[0], DataLine[5], DataLine[6], DataLine[5], DataLine[6])
                result.write(body)


        i += 1


result.close()
