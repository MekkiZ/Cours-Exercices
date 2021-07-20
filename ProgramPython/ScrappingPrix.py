import requests
from bs4 import BeautifulSoup
import pandas


url='https://www.amazon.fr/s?k=carte+graphique+osx&rh=n%3A340858031%2Cp_36%3A428408031&dc&__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626808683&rnid=428393031&ref=sr_nr_p_36_3'

def get_data(url):
    r= requests.get(url)
    soup= BeautifulSoup(r.text, 'html.parser')
    return soup

def parse(soup):
    resulta= soup.find_all('div',{'class': 'a-section a-spacing-none'})
    for i in resulta :
        production={
            'title': i.find('h2',{'class':"a-size-mini a-spacing-none a-color-base s-line-clamp-2"}).text,
            'soldprice': i.find('span',{'class':'a-price-whole'}).text,
            'deliverydate':i.find('span',{'class':'a-text-bold'}).text,
            'promotion':i.find('div',{'class':'a-row a-size-base a-color-secondary'}).text,
            'link': i.find('a',{'class':'a-link-normal a-text-normal'})['href'],
        }
        print(production)
    return
    

soup = get_data(url)
parse(soup)

