#  https://online2pdf.com/pdf2excel
#  https://simplypdf.com/Excel

import tabula
import pandas as pd
import chardet


tb_name="2019_1sem2"

with open('2019_2sem1.csv', 'rb') as f:
    result = chardet.detect(f.read())  # or readline if the file is large


# pd.read_csv('filename.csv', encoding=result['encoding'])

df=pd.read_csv(tb_name+".csv", error_bad_lines=False, header=None, index_col=None, encoding=result['encoding'])
df = pd.DataFrame(df)

n=len(df)

arr = df.values
idx = []

for i in range(0,n):
	t=str(arr[i][0])[0:2]

	if (t!="31"):
		idx.append(i)

df.drop(df.index[idx], inplace=True)
df.to_csv(tb_name+'.csv', header=False, index=False)
