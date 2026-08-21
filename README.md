# Asyntai Chat

## Description

Adds an **Asyntai** tag to Matomo Tag Manager, so an AI chat assistant can go live on your website without touching its code.

Asyntai answers your visitors from your own content: your website, your uploaded documents and your help centre articles. It replies in 36 languages, chosen automatically from the language of the question, and says that it does not know rather than inventing an answer when your content does not cover the question.

Because the tag runs inside your Tag Manager container, which is already on your site, you install nothing else and edit no templates.

### How to use it

1. Create an account at [asyntai.com](https://asyntai.com) and add your website. Asyntai reads it and builds the knowledge base.
2. Copy your widget ID from the Install page in the Asyntai dashboard. It is the `data-asyntai-id` value in the snippet.
3. In Matomo, open **Tag Manager**, choose your container, then **Tags**, then **Create new tag**.
4. Pick **Asyntai Chat**, paste your widget ID, and give it the **Pageview** trigger.
5. Publish the container. The assistant appears on your site.

### What the tag does

It loads `https://widget.asyntai.com/static/js/chat-widget.js` with your widget ID, after the page itself has finished loading, so the widget never slows the page down. It fires once per page, even if the container fires the tag again.

### Privacy

The tag sends nothing to Asyntai by itself. Asyntai receives data only when a visitor opens the chat and writes a message. No Matomo data, no visitor identifier and no report is read by this plugin.

Full documentation: <https://asyntai.com/documentation/integrations/matomo/>

Support: hello@asyntai.com
