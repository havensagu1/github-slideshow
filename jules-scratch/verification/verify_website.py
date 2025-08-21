import os
from playwright.sync_api import sync_playwright, expect

def run(playwright):
    browser = playwright.chromium.launch(headless=True)
    page = browser.new_page()

    # Get the absolute path to the HTML files
    base_path = os.path.abspath('it-consulting-website')

    # Verify index.html
    page.goto(f'file://{base_path}/index.html')
    expect(page).to_have_title("IT Consulting")
    page.screenshot(path="jules-scratch/verification/01-index.png")

    # Verify about.html
    page.goto(f'file://{base_path}/about.html')
    expect(page).to_have_title("About Us - IT Consulting")
    page.screenshot(path="jules-scratch/verification/02-about.png")

    # Verify services.html
    page.goto(f'file://{base_path}/services.html')
    expect(page).to_have_title("Our Services - IT Consulting")
    page.screenshot(path="jules-scratch/verification/03-services.png")

    # Verify contact.html
    page.goto(f'file://{base_path}/contact.html')
    expect(page).to_have_title("Contact Us - IT Consulting")
    page.screenshot(path="jules-scratch/verification/04-contact.png")

    browser.close()

with sync_playwright() as playwright:
    run(playwright)
