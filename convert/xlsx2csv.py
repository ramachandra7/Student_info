import tabula
import pandas as pd
# import xlrd
# import time

# start_time = time.time()
tb_name="ttt"

# df = pd.read_excel(tb_name+".xlsx", sheet_name=None, ignore_index=True)
df = pd.concat(pd.read_excel(tb_name+".xlsx", sheet_name=None), ignore_index=True)
df = pd.DataFrame(df)

print (df.head())
# res = pd.DataFrame()
# n=len(df[0])

# for i in range(0,n):
# 	res = pd.concat([res, df[0][i]])

# # res.to_csv('out.csv', index=False)

# arr = res.values

# idx = []

# for i in range(0,n):
# 	t=str(arr[i][0])[0:2]

# 	if (t!="31"):
# 		idx.append(i)

# res.drop(res.index[idx], inplace=True)
# res.to_csv(tb_name+'.csv', header=False, index=False)

# Printing Time
# print("--- %s seconds ---" % (time.time() - start_time))