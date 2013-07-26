import itertools
import unittest
import timeit

class SimilarSequences(object):
    def count(self, seq, bound):
        nums = xrange(1 , bound+1)
        seqs = itertools.product(nums, repeat=len(seq))
        return len([s for s in seqs if self.similar(seq, list(s))])

    def similar(self, seq1, seq2):
        if len(seq1) != len(seq2):
            return False
        for i in xrange(len(seq1)):
            temp1 = seq1[:]
            temp1.pop(i)
            for j in xrange(len(seq2)):
                temp2 = seq2[:]
                temp2.pop(j)
                if temp1 == temp2 :
                    return True
        return False

class TestSimilarSequences(unittest.TestCase):

    def setUp(self):
        self.instance = SimilarSequences()

    def test_example_0(self):
        args = [[1, 1], 3]
        self.assertEquals(5, self.instance.count(*args))

    def test_example_1(self):
        args = [[1, 2], 2]
        self.assertEquals(4, self.instance.count(*args))

    def test_example_2(self):
        args = [[999], 1000]
        self.assertEquals(1000, self.instance.count(*args))     

    def test_example_3(self):
        args = [[1, 2, 3, 4, 5], 5]
        self.assertEquals(97, self.instance.count(*args))

    def test_example_4(self):
        args = [[999, 555], 1000]
        self.assertEquals(3996, self.instance.count(*args))


if __name__ == '__main__':
    unittest.main()

