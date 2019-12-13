import tabula
import pandas as pd

tb_name="test"
df = tabula.read_pdf(tb_name+".pdf", pages='all', multiple_tables=True, output_format="xlsx")
df=pd.DataFrame(df)
n=len(df[0])

arr =df[0].values
cd=pd.DataFrame(arr)
print (cd[0])

df.to_csv('foo.csv') # to_json, to_excel, to_html
# tables[0].df # get a pandas DataFrame!