#  https://online2pdf.com/pdf2excel

import tabula
import pandas as pd
# import time

# start_time = time.time()
tb_name="test"

df = tabula.read_pdf(tb_name+".pdf", pages='all', multiple_tables=True)
df = pd.DataFrame(df)

res = pd.DataFrame()
n=len(df[0])

for i in range(0,n):
	res = pd.concat([res, df[0][i]])

# res.to_csv('out.csv', index=False)

arr = res.values

idx = []

for i in range(0,n):
	t=str(arr[i][0])[0:2]

	if (t!="31"):
		idx.append(i)

res.drop(res.index[idx], inplace=True)
res.to_csv(tb_name+'.csv', header=False, index=False)

# Printing Time
# print("--- %s seconds ---" % (time.time() - start_time))