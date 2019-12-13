import tabula
import pandas as pd
# import time

# start_time = time.time()
tb_name="test"
df = tabula.read_pdf(tb_name+".pdf", pages='all', multiple_tables=True)
df = pd.DataFrame(df)
# df.to_excel('test.xlsx', header=False, index=False)

# df=pd.read_csv(tb_name+".csv", error_bad_lines=False, header=None)

# res = pd.DataFrame()
# n=len(df)

# arr = df.values
# idx = []

# for i in range(0,n):
# 	t=str(arr[i][0])[0:2]

# 	if (t!="31"):
# 		idx.append(i)

# df.drop(df.index[idx], inplace=True)
# df.to_csv(tb_name+'.csv', header=False, index=False)

# Printing Time
# print("--- %s seconds ---" % (time.time() - start_time))