class Database {
    constructor() {
      this.tweets = [];
    }
  
    query({lastTweetId, pageSize}) {
      if (!lastTweetId) {
        return this.tweets.slice(0, pageSize);
      }
      for (let i = 0; i < this.tweets.length; i++) {
        const currentTweet = this.tweets[i];
        if (currentTweet.id === lastTweetId) {
          return this.tweets.slice(i + 1, i + 1 + pageSize);
        }
      }
      return [];
    }
  
    insert(tweet) {
      this.tweets.push({
        tweet,
        id: getRandomString({length: 50}),
        timestamp: (new Date()).getTime()
      });
    }
  }
  
  
function createTweet({name, handle, message}) {
    const template = `
      <div class="tweet">
        ...
        <div class="tweet__main__message">
          ${message}
        </div>
        ...
      </div>
    `;
    return template;
  }

function loadTestData() {
    const sampleData = [];
    const sampleDataSize = 20;
    for (let i = 0; i < sampleDataSize; i++) {
      const message = getRandomString({
        length: getRandomInteger({min: 10, max: 150}),
        includeSpaces: true
      });
      const firstName = getRandomString({
        length: getRandomInteger({min: 3, max: 7}),
        includeSpaces: false
      });
      const lastName = getRandomString({
        length: getRandomInteger({min: 3, max: 7}),
        includeSpaces: false
      });
      const handle = '@' + getRandomString({
        length: getRandomInteger({min: 4, max: 8}),
        includeSpaces: false
      });
      sampleData.push({
        tweet: {
          name: `${firstName} ${lastName}`,
          message, handle
        }
      });
    }
    for (const data of sampleData) {
      // Do nothing with result
      api.post(HOST + 'tweets', data, () => {});
    }
  }


  const database = new Database();
  
  function getTweetsHandler(data) {
    const pageSize = data.pageSize;
    const sortOrder = data.sortOrder;
    const lastTweetId = data.lastTweetId;
  
    if (sortOrder !== 'recent') {
      throw new Error('I dont know how to handle that');
    }
  
    return database.query({lastTweetId, pageSize});
  }
  
  function postTweetHandler(data) {
    database.insert(data.tweet);
  }
  
  const endpoints = {
    "/tweets": {
      "get": getTweetsHandler,
      "post": postTweetHandler
    }
  }


  // Client

const DEFAULT_PAGE_SIZE = 5;
const DEFAULT_SORT_ORDER = 'recent';

function onNewTweets(data) {
  let tweetsHTML = '';
  for (const tweetResponse of data) {
    const tweet = createTweet(tweetResponse.tweet);
    tweetsHTML += tweet;
  }
  document.body.innerHTML = tweetsHTML;
}

function hydrate() {
  const params = {
    pageSize: DEFAULT_PAGE_SIZE,
    sortOrder: DEFAULT_SORT_ORDER
  }
  api.get(HOST + 'tweets', params, onNewTweets);
}

loadTestData();
hydrate();