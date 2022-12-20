# Plot the reservations/pizzas dataset.
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sea
sea.set()
plt.axis([0, 50, 0, 50])                                 # scale axes (0 to 50)
plt.xticks(fontsize=14)                                  # set x axis ticks
plt.yticks(fontsize=14)                                  # set y axis ticks
plt.xlabel("Reservations", fontsize=14)                  # set x axis label
plt.ylabel("Pizzas", fontsize=14)   
X, Y = np.loadtxt("D:\Xampp\htdocs\Opdrachten\Code-Gorilla-Syllabus\pages\Oefeningen\ML\pizza.txt", skiprows=1, unpack=True)
plt.plot(X, Y, "bo")                                     # plot data
plt.show()                                               # display chart


def predict(X, w, b):
    return X * w + b



def loss(X, Y, w, b):
    return np.average((predict(X, w, b) - Y) ** 2)

def train(X, Y, iterations, lr):
    w = b = 0
    for i in range(iterations):
        current_loss = loss(X, Y, w, b)
        if i % 300 == 0:
            print("Iteration %4d => Loss: %.6f" % (i, current_loss))

        if loss(X, Y, w + lr, b) < current_loss: # Updating weight
            w += lr
        elif loss(X, Y, w - lr, b) < current_loss: # Updating weight
            w -= lr
        elif loss(X, Y, w, b + lr) < current_loss: # Updating bias
            b += lr
        elif loss(X, Y, w, b - lr) < current_loss: # Updating bias
            b -= lr
        else:
            return w, b

    raise Exception("Couldn't converge within %d iterations" % iterations)
# Train the system
w, b = train(X, Y, iterations=10000, lr=0.01)
print("\nw=%.3f, b=%.3f" % (w, b))

# Predict the number of pizzas
print("Prediction: x=%d => y=%.2f" % (20, predict(20, w, b)))