import requests
from bs4 import BeautifulSoup
import pandas
from urllib.request import Request, urlopen 

"""
link0= "https://www.ebay.fr/itm/203162568998?hash=item2f4d6ec926%3Ag%3An4QAAOSwSadfnmh3&LH_BIN=1"
link2= "https://www.ebay.fr/itm/313464994070?_trkparms=aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D20201210111314%26meid%3De6e61bc8d55647b595a0a9f8b2bfb7fc%26pid%3D101195%26rk%3D2%26rkt%3D12%26sd%3D203162568998%26itm%3D313464994070%26pmt%3D1%26noa%3D0%26pg%3D2047675%26algv%3DSimplAMLv9PairwiseUnbiasedWeb%26brand%3DNike&_trksid=p2047675.c101195.m1851&amdata=cksum%3A313464994070e6e61bc8d55647b595a0a9f8b2bfb7fc%7Cenc%3AAQAGAAACEF1SFFv7lRs0IgnbaQkeOor0k4ek2kelWFAvds%252BQnyRLb9ciNA3p7uhCQGuJ3UV20On%252FMJLrKexVV7beR%252BqxkfPigMEsFP5p1pJQuhGeeEbV26%252B82w80gw%252BEFtCxG9DniAdQ5%252FnTJy8l0jSfYbjusMRYBZRDF83tOYgE595NHK1eVC4Q%252F8eevFCDZL13OanqXJpU2w8oJEW29yh63TYwlKE2VAnvBi9%252F4nvEWBAq9cYajHoCQCKhk9fwRuKO9vwoQvbXKAvc1Ih1%252BdMsHqTmvs9fAkUaW2C9YAsRjWTlM%252BLEgATC4497JWaVibRyQ6YmkuBy7Wy2%252B6VADVKq136imrxYLXCUUtzWkWBcvhBid8M4wAXMEMaMpzlF5qY62qWU8Dj946XpKVhx%252Bvp8CT8cCQMDtKZD2aPhl5GmWDcJBWlomymtPAxNFy0HTlPZbAmg2G1LqR1R52Dm3GXpSKQDkUiTBEqtzJnsiBX5G5VBMRfS4EF6fEDchh1Q0XeDN%252B9Tx94exuQq%252FW2agaB65K6I%252Bb5CGM%252FZCOwOHUq%252FWIehdOXBdkZTAlKErClYq%252F1NMmaPnLJ56MMRNu%252FqFG3U%252BtcL5hFuhcE9eKYAEvzp60PVZcvj3lr%252FXTpp0dlb5HimIwsQLM2YhnpO58IADQT4%252FbZY%252FBFijaYaUu19I7cGU9mIFNjeeah95pUfsHlZ8y0WZXvTMg%253D%253D%7Campid%3APL_CLK%7Cclp%3A2047675"
link3= "https://www.ebay.fr/itm/255043814366?_trkparms=aid%3D1110006%26algo%3DHOMESPLICE.SIM%26ao%3D1%26asc%3D20201210111314%26meid%3D134b417f664645ee8aaf3dc1fb31ab7d%26pid%3D101195%26rk%3D3%26rkt%3D12%26sd%3D313464994070%26itm%3D255043814366%26pmt%3D1%26noa%3D0%26pg%3D2047675%26algv%3DSimplAMLv9PairwiseUnbiasedWeb%26brand%3DNike&_trksid=p2047675.c101195.m1851&amdata=cksum%3A255043814366134b417f664645ee8aaf3dc1fb31ab7d%7Cenc%3AAQAGAAACAHaSkS075eYnGxU0ZVPVyTFhdUDw3DxYJ11paXVd9tgjIqPqp30ElTvMO8v2Y1T2ZNnZ2eVmFC%252FfnXeqK%252FtpF1IjuSibNSeLYgtZDo7Vj9rdZuZZSvL21ICVGYjLd1IZpbasEyMLx6d9WnbnW%252FKMSdFtNd5IHkOmNmwgQUZzxjcpQsiBVqRGJgmKFBAkOOX7LipKetcZnpWqfT0BHYWHqOQGFPOX8%252BBgDjAHYMk9RL87DcHYWwUR1zo3n18Ihe4xEmPj524MEJ7ctczdumgRB8LTCQvZLn41pflCarQuuOwP0rkYU8ZpqVkhGpMc7Q021WhO4%252FvDi7naolgF9cOK63x7InBjIXddPTv4rbhfoTWXAFvRySUBfx2XaeSRkKL0z7LmJgDmgyGtWTToKq%252Fo7WSP2UQvEw8xmaxL1qs%252F7hDVSuHZcglVrqMeRfpcg%252BF%252FO4OCdCGujxH1DsapSbuvwKvs2iJLOyo2Ig1ilBLdPIqVzuPQUaoopU50uWPskh3nQCyhvuaW8OZXz1F5z%252Brf7KA1OBQpY30Gzgehg1zZ3vGRj7YkJy7L4yblsnttlfm3b%252BG6G1067pyPG7j6M%252FnOf1LldLhLxCMVqA1rKQtqcIxwqljxGQ8Z%252FGjUf%252F03Ymtxd%252Fo291DsRYLfUyGsJxBz60XPgJza1FxwDjKItiFhChnt%7Campid%3APL_CLK%7Cclp%3A2047675"

link = [link0, link2, link3]
for i in link:
    requete= Request(i, headers={'User-Agent': 'Chrome/91.0.4472.164'})
    webpage = urlopen(requete).read()
    with requests.Session() as c: 
        soup= BeautifulSoup(webpage, 'html5lib')
        print(soup.find("span", attrs={"itemprop":"price"})['content'])
        print(soup.find("div",attrs={"itemprop":"itemCondition"}))
"""        

url='https://www.ebay.fr/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313&_nkw=carte+graphique&_sacat=0'

def get_data(url):
    r= requests.get(url)
    soup= BeautifulSoup(r.text, 'html.parser')
    return soup
    print(soup)

def parse(soup):
    resultas= soup.find_all('div',{'class':'s-item__wrapper clearfix'})
    for i in resultas :
        produit={
            'title': i.find('h3',{'class':'s-item__title'}).text,
            'soldprice': i.find('span',{'class':'s-item__price'}).replace('€','').replace(',',''),
            'deliverydate':i.find('span',{'class':'s-item__delivery-options s-item__deliveryOptions'}),
            'PriceAdd':i.find('span',{'class':'s-item__shipping s-item__logisticsCost'}).text,
            'link': i.find('a',{'class':'s-item__link'})['href'],
        }
        print(produit)
    return
    

soup = get_data(url)
parse(soup)

