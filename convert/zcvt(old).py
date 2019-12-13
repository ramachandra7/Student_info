import pandas as pd

# Range varies
range1 = [i for i in range(0,13)]
df=pd.read_csv('out.csv', usecols=range1, error_bad_lines=False, header = None)

arr = df.values
idx = []

for i in range(0,len(arr)):
	t=str(arr[i][0])[0:2]

	if (t!="31"):
		idx.append(i)

df.drop(df.index[idx], inplace=True)
df.to_csv('modified2.csv', header=False, index=False)