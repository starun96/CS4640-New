package test;
import java.io.Serializable;


public class PageData implements Serializable {
	private int numPagesVisited;
	private int totalTimeStayed;
	private String nickname;
	
	public PageData()
	{
		setNumPagesVisited(0);
		setTotalTimeStayed(0);
	}

	public int getNumPagesVisited() {
		return numPagesVisited;
	}

	public void setNumPagesVisited(int numPagesVisited) {
		this.numPagesVisited = numPagesVisited;
	}

	public int getTotalTimeStayed() {
		return totalTimeStayed;
	}

	public void setTotalTimeStayed(int totalTimeStayed) {
		this.totalTimeStayed = totalTimeStayed;
	}
	
	public void incPagesVisited()
	{
		numPagesVisited++;
	}
	
	public void increaseTimeStayed(int time)
	{
		totalTimeStayed += time;
	}

	public String getNickname() {
		return nickname;
	}

	public void setNickname(String nickname) {
		this.nickname = nickname;
	}
}
